<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('M_Discussion');
        if ($this->session->userdata('role') != 'siswa') {
            redirect('auth', 'refresh');
        }
        $totalXP = $this->Course_model->totalXP();
        $this->Course_model->setLevel($totalXP);
    }


    public function index()
    {
        $data = array(
            'title'     => "Beranda",
            'menu'      => "Dashboard",
            'courseList' => $this->Course_model->getCourseSiswa_limit(),
            'countCourse' => $this->Course_model->countCourseSiswa(),
            'user'        => $this->Course_model->getUser(),
            'total_xp'      => $this->Course_model->totalXP(),
            'total_mission' => $this->Course_model->countAllLesson() + $this->Course_model->countAllQuiz(),
            'completed_mission' => $this->Course_model->countCompletedLesson() + $this->Course_model->countCompletedQuiz(),
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/dashboard');
        $this->load->view('siswa/template/footer');
    }

    public function kelas()
    {
        $data = array(
            'title'     => "Kelas Saya",
            'menu'      => "Kelas",
            'user'        => $this->Course_model->getUser(),
            'courseList' => $this->Course_model->getCourseSiswa(),
            'total_xp'      => $this->Course_model->totalXP(),
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/kelas');
        $this->load->view('siswa/template/footer');
    }

    public function carikelas()
    {
        $data = array(
            'title' => 'Masuk Kelas Baru',
            'menu'  => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'total_xp'      => $this->Course_model->totalXP(),
            'course' => $this->Course_model->getAllCourse(),
            'back_link' => $_SERVER['HTTP_REFERER'],
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/carikelas');
        $this->load->view('siswa/template/footer');
    }
    public function join($id)
    {
        $data = array(
            'UserID'    => $this->session->userdata('id_user'),
            'CourseID'  => $id
        );

        $this->db->insert('user_course', $data);

        redirect('lesson/course/' . $id, 'refresh');
    }
    public function quit($CourseID)
    {
        $this->Course_model->quit($CourseID);
        $this->Course_model->deleteUserLesson($CourseID);

        redirect('siswa/kelas', 'refresh');
    }

    public function aktivitas($CourseID)
    {
        $data = array(
            'title'     => $this->Course_model->course($CourseID)->CourseName . ' - ' . $this->Course_model->course($CourseID)->ClassName,
            'menu'      => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'course_menu'      => 'Aktivitas',
            'course'    => $this->Course_model->course($CourseID),
            'jml_siswa' => $this->Course_model->countSiswaByCourse($CourseID),
            'log' => $this->Course_model->getLogByCourseID($CourseID),
            'total_xp'      => $this->Course_model->totalXP(),
            'back_link' => base_url() . 'siswa/kelas/',

        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/course_menu');
        $this->load->view('siswa/course/aktivitas');
        $this->load->view('siswa/template/footer');
    }
    public function teman($CourseID)
    {
        $data = array(
            'title'     => $this->Course_model->course($CourseID)->CourseName . ' - ' . $this->Course_model->course($CourseID)->ClassName,
            'menu'      => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'course_menu'      => 'Teman',
            'course'    => $this->Course_model->course($CourseID),
            'teman'     => $this->Course_model->teman($CourseID),
            'jml_siswa' => $this->Course_model->countSiswaByCourse($CourseID),
            'total_xp'      => $this->Course_model->totalXP(),
            'back_link' => base_url() . 'siswa/kelas/',
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/course_menu');
        $this->load->view('siswa/course/teman');
        $this->load->view('siswa/template/footer');
    }
    public function informasi($CourseID)
    {
        $data = array(
            'title'     => $this->Course_model->course($CourseID)->CourseName . ' - ' . $this->Course_model->course($CourseID)->ClassName,
            'menu'      => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'course_menu'      => 'Informasi',
            'course'    => $this->Course_model->courseInfo($CourseID),
            'total_xp'      => $this->Course_model->totalXP(),
            'jml_siswa' => $this->Course_model->countSiswaByCourse($CourseID),
            'back_link' => base_url() . 'siswa/kelas/',
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/course_menu');
        $this->load->view('siswa/course/informasi');
        $this->load->view('siswa/template/footer');
    }
    public function leaderboard($CourseID)
    {
        $data = array(
            'title'     => $this->Course_model->course($CourseID)->CourseName . ' - ' . $this->Course_model->course($CourseID)->ClassName,
            'menu'      => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'course_menu'      => 'Leaderboard',
            'course'    => $this->Course_model->courseInfo($CourseID),
            'leaderboard'    => $this->Course_model->getLeaderboard($CourseID),
            'total_xp'      => $this->Course_model->totalXP(),
            'jml_siswa' => $this->Course_model->countSiswaByCourse($CourseID),
            'back_link' => base_url() . 'siswa/kelas/',
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/course/course_menu');
        $this->load->view('siswa/course/leaderboard');
        $this->load->view('siswa/template/footer');
    }

    public function liveCode()
    {
        $data = array(
            'title' => "Live Code",
            'menu'  => 'Live Code',
            'user'        => $this->Course_model->getUser(),
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/livecode');
        $this->load->view('siswa/template/footer');
    }
}

    
    /* End of file  siswa.php */
