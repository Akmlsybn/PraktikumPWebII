<?php 

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{

    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $buku = $this->bukuModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
            'buku' => $buku
        ];
        return view('buku/index', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Form Tambah Buku',
            'validation' => session('validation') ?? \Config\Services::validation()
        ];
        return view('buku/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => 'buku harus diisi.',
                    'is_unique' => 'buku sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'penulis harus diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'penerbit harus diisi.'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1900]|less_than_equal_to[2024]',
                'errors' => [
                    'required' => 'tahun terbit harus diisi.',
                    'integer' => 'tahun terbit harus berupa angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/buku/create')->withInput()->with('validation', $validation);
        }

        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit')
        ]);

        session()->setFlashdata('pesan', 'Data Buku berhasil ditambahkan.');

        return redirect()->to('/buku');
    }


    public function delete($id)
    {
        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Data Buku berhasil dihapus.');
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => session('validation') ?? \Config\Services::validation(),
            'buku' => $this->bukuModel->find($id)
        ];
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $bukuLama = $this->bukuModel->find($id);
        if($bukuLama['judul'] == $this->request->getVar('judul')) {
            $ruleJudul = 'required';
        } else {
            $ruleJudul = 'required|is_unique[buku.judul]';
        }

        if(!$this->validate([
            'judul' => [
                'rules' => $ruleJudul,
                'errors' => [
                    'required' => 'buku harus diisi.',
                    'is_unique' => 'buku sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'penulis harus diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'penerbit harus diisi.'
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1900]|less_than_equal_to[2024]',
                'errors' => [
                    'required' => 'tahun terbit harus diisi.',
                    'integer' => 'tahun terbit harus berupa angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/buku/edit/' . $id)->withInput()->with('validation', $validation);
        }

        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit')
        ]);

        session()->setFlashdata('pesan', 'Data Buku berhasil di Update.');

        return redirect()->to('/buku');
    }
}
?>