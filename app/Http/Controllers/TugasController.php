<?php

namespace App\Http\Controllers;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TugasController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $posts = Tugas::all();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Tugas',
            'data'    => $posts
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'     => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ],401);

        } else {

            $post = Tugas::create([
                'judul'         => $request->input('judul'),
                'deskripsi'     => $request->input('deskripsi'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Tugas Berhasil Disimpan!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Tugas Gagal Disimpan!',
                ], 400);
            }

        }
    }

    public function show($id)
    {
        $post = Tugas::find($id);

        if ($post) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Post!',
                'data'      => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tugas Tidak Ditemukan!',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul'     => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ],401);

        } else {

            $post = Tugas::whereId($id)->update([
                'judul'         => $request->input('judul'),
                'deskripsi'     => $request->input('deskripsi'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Tugas Berhasil Diupdate!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Tugas Gagal Diupdate!',
                ], 400);
            }

        }
    }

    public function destroy($id)
    {
        $post = Tugas::whereId($id)->first();

        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Tugas Berhasil Dihapus!',
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Tugas Gagal Dihapus!',
            ], 400);
        }

    }

    //
}
