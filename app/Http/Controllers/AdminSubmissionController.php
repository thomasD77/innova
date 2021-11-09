<?php

namespace App\Http\Controllers;

use App\Exports\ContactExport;
use App\Exports\SubmissionExport;
use App\Models\Submission;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $submissions = Submission::where('archived', 0)
            ->latest()
            ->paginate(10);
        return view('admin.submissions.index', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($_POST['g-recaptcha-response'] != "") {
            $secret = config('custom.RECAPTCHA_SECRET_KEY');

            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);

            if ($responseData->success)
            {

                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'description' => $request->description,
                    'approval' => 1
                ];

                Submission::create($data);
            }

            $user = User::where('email', config('custom.MAIL_TO_NOTIFICATION'))->first();
            $user->notify(new ContactFormNotification());

            return redirect('/bedankt');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $submission = Submission::findOrfail($id);
        return view('admin.submissions.show', compact('submission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function archive()
    {
        $submissions = Submission::where('archived', 1)
            ->latest()
            ->paginate(10);
        return view('admin.submissions.archive', compact('submissions'));
    }


    public function UnArchiveSubmission($id)
    {
        $submission = Submission::findOrFail($id);
        $submission->archived = 0;
        $submission->update();
        return redirect()->back();
    }

    public function export(Request $request)
    {
        return Excel::download(new SubmissionExport(), 'submissions.xlsx');
    }

}
