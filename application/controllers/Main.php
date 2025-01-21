<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('main');
		$this->load->view("common/footer");
	}

	public function video_index()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('video_index');
		$this->load->view("common/footer");
	}

	public function video_channel_index()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('video_channel_index');
		$this->load->view("common/footer");
	}

	public function video_view()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('video_view');
		$this->load->view("common/footer");
	}

	public function sound_rest()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('sound_rest_index');
		$this->load->view("common/footer");
	}

	public function sound_audio_list()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('sound_audio_list');
		$this->load->view("common/footer");
	}
	
	public function sound_music_list()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('sound_music_list');
		$this->load->view("common/footer");
	}

	public function sound_view()
	{
		$this->load->view("common/head");
		$this->load->view("common/top_header");
		$this->load->view("common/top_navber");
		$this->load->view("common/sidebar");
		$this->load->view('sound_view');
		$this->load->view("common/footer");
	}
}
