<?php

class Report extends CI_Controller
{
    public function index()
    {
    }
    public function book_pdf()
    {
        $this->load->library('dompdf_gen');

        $data['books'] = $this->model_buku->tampil_data('buku')->result();

        $this->load->view('report/pdf/books', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_Books", array('Attachment' => 0));
    }
    public function request_pdf()
    {
        $this->load->library('dompdf_gen');

        $data['requests'] = $this->model_buku->get_request('request')->result();

        $this->load->view('report/pdf/request', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_Request", array('Attachment' => 0));
    }
    public function keluhan_pdf()
    {
        $this->load->library('dompdf_gen');

        $data['complaints'] = $this->model_buku->get_complaint('keluhan')->result();

        $this->load->view('report/pdf/complaint', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_Keluhan", array('Attachment' => 0));
    }
    public function anggota_pdf()
    {
        $this->load->library('dompdf_gen');

        $data['members'] = $this->model_buku->get_member('anggota')->result();

        $this->load->view('report/pdf/member', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Report_members", array('Attachment' => 0));
    }
}
