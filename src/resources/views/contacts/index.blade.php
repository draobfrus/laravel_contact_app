<h1>問合せ一覧</h1>
<table>
    <thead>
        <tr>
            <th>部署名</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>問合せ内容</th>
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
<a href="{{ route('contacts.create') }}">問合せを作成する</a>
