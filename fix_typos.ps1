$ErrorActionPreference = "Stop"

# 1. Rename models (using temp names to overcome Windows case-insensitivity in git)
git mv app/Models/admin.php app/Models/Admin.tmp
git mv app/Models/Admin.tmp app/Models/Admin.php

git mv app/Models/contact.php app/Models/Contact.tmp
git mv app/Models/Contact.tmp app/Models/Contact.php

git rm -f app/Models/costumer.php

# 2. Rename Controller
git mv app/Http/Controllers/CostumerController.php app/Http/Controllers/CustomerController.php

# 3. Rename Filament Resources
git mv app/Filament/Resources/Costumers app/Filament/Resources/CustomerResource
git mv app/Filament/Resources/CustomerResource/CostumerResource.php app/Filament/Resources/CustomerResource/CustomerResource.php

git mv app/Filament/Resources/CustomerResource/Pages/CreateCostumer.php app/Filament/Resources/CustomerResource/Pages/CreateCustomer.php
git mv app/Filament/Resources/CustomerResource/Pages/EditCostumer.php app/Filament/Resources/CustomerResource/Pages/EditCustomer.php
git mv app/Filament/Resources/CustomerResource/Pages/ListCostumers.php app/Filament/Resources/CustomerResource/Pages/ListCustomers.php
git mv app/Filament/Resources/CustomerResource/Pages/ViewCostumer.php app/Filament/Resources/CustomerResource/Pages/ViewCustomer.php

git mv app/Filament/Resources/CustomerResource/Schemas/CostumerForm.php app/Filament/Resources/CustomerResource/Schemas/CustomerForm.php
git mv app/Filament/Resources/CustomerResource/Schemas/CostumerInfolist.php app/Filament/Resources/CustomerResource/Schemas/CustomerInfolist.php

git mv app/Filament/Resources/CustomerResource/Tables/CostumersTable.php app/Filament/Resources/CustomerResource/Tables/CustomersTable.php

# Replace content in CustomerController
$content = Get-Content app/Http/Controllers/CustomerController.php -Raw
$content = $content -replace "CostumerController", "CustomerController"
Set-Content app/Http/Controllers/CustomerController.php $content

# Replace content in routes/web.php
$content = Get-Content routes/web.php -Raw
$content = $content -replace "CostumerController", "CustomerController"
Set-Content routes/web.php $content

# Replace content in Filament Resource files
$files = Get-ChildItem -Path app/Filament/Resources/CustomerResource -Recurse -Filter *.php
foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    $content = $content -replace "Costumers", "CustomerResource"
    $content = $content -replace "Costumer", "Customer"
    $content = $content -replace "costumer", "customer"
    Set-Content $file.FullName $content
}

# Fix Admin model name internally
$content = Get-Content app/Models/Admin.php -Raw
$content = $content -replace "class admin", "class Admin"
Set-Content app/Models/Admin.php $content

# Fix Contact model name internally
$content = Get-Content app/Models/Contact.php -Raw
$content = $content -replace "class contact", "class Contact"
Set-Content app/Models/Contact.php $content

Write-Output "Renames and code replacements completed successfully."
