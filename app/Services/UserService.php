<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getUserList($name, $limit)
    {
        return User::select('name', 'email', 'password','id')
                   ->where('name', 'ILIKE', "%$name%")
                   ->orderBy('id')
                   ->take($limit)
                   ->get();
    }

    public function getFormattedUserData($limit)
    {
        return User::with('pegawai')
                   ->take($limit)
                   ->get()
                   ->map(function ($user) {
                       return $this->formatUserData($user);
                   });
    }

    protected function formatUserData($user)
    {
        // Manipulasi data pegawai
        $pegawaiData = [];
        if ($user->pegawai) {
            $pegawaiData = $user->pegawai->toArray();
            foreach ($pegawaiData as $key => $value) {
                if (is_null($value)) {
                    unset($pegawaiData[$key]);
                }
            }
        }

        // Manipulasi data user
        $userData = $user->toArray();
        foreach ($userData as $key => $value) {
            if (is_null($value)) {
                unset($userData[$key]);
            }
        }

        // Gabungkan data user dan data pegawai
        return array_merge($userData, ['pegawai' => $pegawaiData]);
    }
}
