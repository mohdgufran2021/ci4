<?php namespace App\Controllers;

class codeigniter extends BaseController
{
    public function FormData()
    {
        $model = new CodeigniterModel();
        helper('form');
        $data =
            [
                'name' => $this->request('name'),
                'address' => $this->request('address'),
                'contact' => $this->request('contact'),
                'email' => $this->request('email'),
            ];

        $user = $model->where('name', $this->request->getPost('name'))
            ->where('address', $this->request->getPost('address'))
            ->where('contact', $this->request->getPost('contact'))
            ->where('email', $this->request->getPost('email'))
            ->get()->getFirstRow('array');

       if($this->request->getMethos() === 'post' && $this->validate(
        [
            'name' => 'required|min_length[3]|max_length[200]',
            'address'  => 'required|min_length[3]|max_length[200]',
            'contact' => 'required|min_length[3]|max_length[200]',
            'email' => 'required|min_length[3]|max_length[200]',
        ]))
        {
            $model->save([
                'name' => ($this->request->getPost('name')),
                'address' => ($this->request->getPost('address')),
                'contact' => ($this->request->getPost('contact')),
                'email' => ($this->request->getPost('email')),
            ]);

            echo view('success_signin');
        }

        else
        {
            echo view('codeigniter', $data);
        }


    }


}
