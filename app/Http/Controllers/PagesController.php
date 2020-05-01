<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Member;
use App\Manage;
use App\Gallery;
use App\Event;
use App\Patron;
use App\Executive;
use App\Video;


class PagesController extends Controller
{
    public function index() {

      $sliders = Slider::take(5)->get();
      return view('pages.index', compact('sliders'));
    }

    public function gallery() {
      $gallery = Gallery::all();
      return view('pages.gallery', compact('gallery'));
    }

    public function mission() {
      return view('pages.mission');
    }

    public function management() {
      $manage = Manage::all();
      return view('pages.management', compact('manage'));
    }

    public function members() {
      $members = Member::all();
      return view('pages.members', compact('members'));
    }

    public function contact() {
      return view('pages.contact');
    }

    public function events() {

      $events = Event::take(8)->get();
      return view('pages.events', compact('events'));
    }

    public function patrons() {
      $patrons = Patron::all();
      return view('pages.patrons', compact('patrons'));
    }

    public function executives() {
      $executives = Executive::all();
      return view('pages.executives', compact('executives'));
    }

    public function videos() {
      $videos = Video::all();
      return view('pages.videos', compact('videos'));
    }


    public function donation() {
      return view('pages.donation');
    }

    public function blog() {
      return view('pages.blog');
    }
}
