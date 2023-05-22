<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Services\Contact\ContactServiceInterface;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * @var ContactServiceInterface
     */
    protected ContactServiceInterface $contactService;

    /**
     * @param App\Services\Contact\ContactServiceInterface $contactService サービスインターフェイス
     * @return void
     */
    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * お問い合わせ一覧を表示します。
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = $this->contactService->getAllContacts();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * お問い合わせ作成フォームを表示します。
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = $this->contactService->getAllDepartments();
        return view('contacts.create', compact('departments'));
    }

    /**
     * 新規お問い合わせを保存します。
     *
     * @param  App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        DB::transaction(function () use ($request) {
            $this->contactService->createContact(
                $request['department_id'],
                $request['name'],
                $request['email'],
                $request['content'],
                $request['age'],
                $request['gender']
            );
        });
        return redirect('contacts');
    }
}
