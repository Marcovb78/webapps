<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;
Use App\Charts\UserChart;
Use App\Charts\VideoChart;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function showAdminPanel()
    {
        // Show alle users en videos
        $users = User::all();
        $videos = Video::all();

        // User Chart
        $chart = new UserChart;
        $chart->labels(['Leerling']);
        $chart->dataset('Users', 'pie', [count($users)])->backgroundcolor(['red']);

        // Video Chart
        $videochart = new VideoChart;
        $videochart->labels(['Videos']);
        $videochart->dataset('Videos', 'pie', [count($videos)])->backgroundcolor(['blue']);

        // return de view
        return view('modules.admin.admin-panel', compact('users', 'videos', 'chart', 'videochart'));

    }

    public function showAllUsers()
    {
        $users = User::all();

        return view('modules.admin.users', compact('users'));

    }

    public function addUser()
    {
        return view('modules.admin.add-user');
    }

    public function showAllVideos()
    {

        $videos = Video::all();

        return view('modules.admin.videos', compact('videos'));

    }

    public function destroyUser(Request $request, User $user)
    {

        $user->delete();

        return redirect('admin/users');

    }

    public function destroyVideo(Request $request, Video $video)
    {

        $video->delete();

        return redirect('admin/videos');

    }
}
