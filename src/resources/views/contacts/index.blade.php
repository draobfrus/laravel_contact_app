@extends('layouts.contact')

@section('title', 'お問い合わせ一覧')

@section('content')
    <a href="{{ route('contacts.create') }}">お問い合わせを作成する</a>
    <table>
        <thead>
            <tr>
                <th>部署名</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>お問い合わせ内容</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->department->name }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->content }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
