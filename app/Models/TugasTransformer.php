<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasTransformer {

    public function transform(Tugas $tugas) {
        $tugas_status = null;
        if ($tugas->selesai == null) {
            $tugas_status = 'belum selesai';
        } else {
            $tugas_status = 'selesai';
        }

        return [
            'id'        => $tugas->id,
            'judul'     => $tugas->judul,
            'deskripsi' => $tugas->deskripsi,
            'selesai'   => $tugas_status,
        ];
    }

}
