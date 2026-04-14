<?php

namespace App\Actions;

use App\Models\Customer;
use App\Models\Talent;
use App\Models\User;
use Filament\Notifications\Notification;

class NotifyAdmins
{
    /**
     * Kirim notifikasi in-app ke semua super_admin saat ada pesan contact baru.
     */
    public static function newContact(Customer $customer): void
    {
        try {
            $admins = User::role('super_admin')->get();

            if ($admins->isEmpty()) {
                return;
            }

            Notification::make()
                ->title('📬 Pesan Baru Masuk')
                ->body("Dari: {$customer->username} · Kategori: ".self::categoryLabel($customer->category))
                ->icon('heroicon-o-envelope')
                ->success()
                ->sendToDatabase($admins);
        } catch (\Exception $e) {
            // Role might not exist or other notification issue
            return;
        }
    }

    /**
     * Kirim notifikasi in-app ke semua super_admin saat ada pendaftaran talent baru.
     */
    public static function newTalent(Talent $talent): void
    {
        try {
            $admins = User::role('super_admin')->get();

            if ($admins->isEmpty()) {
                return;
            }

            Notification::make()
                ->title('🎯 Talent Baru Mendaftar')
                ->body("Nama: {$talent->name} · Skill: {$talent->skill_label} · Level: {$talent->experience_label}")
                ->icon('heroicon-o-user-plus')
                ->info()
                ->sendToDatabase($admins);
        } catch (\Exception $e) {
            // Role might not exist or other notification issue
            return;
        }
    }

    private static function categoryLabel(string $category): string
    {
        return match ($category) {
            'web_application' => 'Web Application',
            'it_support' => 'IT Support',
            'ui_ux' => 'UI/UX Design',
            'digital_consulting' => 'Digital Consulting',
            'goes_to_school' => 'Goes to School',
            'social_media' => 'Social Media',
            default => 'Lainnya',
        };
    }
}
