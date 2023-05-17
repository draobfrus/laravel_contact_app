<h1>部署・部署長一覧</h1>
<table>
    <thead>
        <tr>
            <th>部署名</th>
            <th>部署長名</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->name }}</td>
            <td>{{ $department->manager_name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

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
