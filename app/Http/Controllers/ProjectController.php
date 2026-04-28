<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Technology;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProjectController
{
    public function __construct(
        protected ImageService $imageService
    ) {}
    /**
     * Display a listing of projects for management.
     */
    public function index(): View
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create(): View
    {
        $technologies = Technology::all();

        return view('admin.projects.create', compact('technologies'));
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $this->imageService->uploadToWebp($request->file('thumbnail'), 'projects');
        }

        /** @var User $user */
        $user = Auth::user();
        $project = $user->projects()->create($validated);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dibuat.');
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project): View
    {
        $project->load('technologies');

        // Fetch next and previous projects for navigation
        $nextProject = Project::where('id', '>', $project->id)->oldest('id')->first();
        $prevProject = Project::where('id', '<', $project->id)->latest('id')->first();

        return view('portofolio.detail', compact('project', 'nextProject', 'prevProject'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(Project $project): View
    {
        $technologies = Technology::all();
        $project->load('technologies');

        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail) {
                Storage::disk('public')->delete($project->thumbnail);
            }
            $validated['thumbnail'] = $this->imageService->uploadToWebp($request->file('thumbnail'), 'projects');
        }

        // Re-generate slug if title changed (handled by boot method in model, but manual update works too)
        if ($project->judul !== $validated['judul']) {
            $project->slug = Str::slug($validated['judul']);
        }

        $project->update($validated);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(Project $project): RedirectResponse
    {
        if ($project->thumbnail) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus.');
    }
}
