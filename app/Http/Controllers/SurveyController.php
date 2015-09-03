<?php

namespace App\Http\Controllers;



use Mail;
use App\helpers;
use App\Survey;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\SurveyRequest;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SurveyRequest  $request
     * @return Response
     */
    public function store(SurveyRequest $request)
    {
        // validation performed via SurveyRequest.php

        // persist the Survey to the db.
        $survey = Survey::create($request->all());

        // send email
        $this->sendEmail($survey);

        // send a flash message that Survey was added.
        flash()->success('Success', 'Survey added... Thanks!');

        // redirect back to the Survey page.
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *  populate email reminder to MAIL_TO_RECIPIENT, which is Phil Bautista.
     *
     * @param $survey
     */
    public function sendEmail($survey)
    {
        $to = env('MAIL_TO_RECIPIENT', 'nowhere@example.com');
        $msg = "" . $survey->name . "" . ' has requested a Free-Day of consulting services.';

        Mail::queue('email.surveyReceived', compact('msg'), function ($message) use ($survey, $msg, $to) {
            $message->from($survey->email);
            $message->to($to);
            $message->subject($msg);
        });
    }
}
