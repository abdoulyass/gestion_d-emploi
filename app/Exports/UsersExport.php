<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Query users with existing email addresses
        $usersWithEmails = User::whereNotNull('email')->get();

        // Extract only the necessary columns
        $filteredUsers = $usersWithEmails->map(function ($user) {
            return [
                'name' => $user->name,
                'email' => $user->email,
                // Add more columns if needed
            ];
        });

        return $filteredUsers;
    }
}
