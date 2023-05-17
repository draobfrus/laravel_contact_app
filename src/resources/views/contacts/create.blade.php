<h1>問合せ作成</h1>
<table>
    <tr>
        <th>部署</th>
        <td>
            <select name="部署">
                @foreach ($departments as $department)
                    <option>{{ $department->name }}</option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <th>名前</th>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>
            <input type="email" name="email">
        </td>
    </tr>
    <tr>
        <th>問合せ内容</th>
        <td>
            <textarea name="content"></textarea>
        </td>
    </tr>
    <tr>
        <th>年齢</th>
        <td>
            <input type="number" name="age">
        </td>
    </tr>
    <tr>
        <th>性別</th>
        <td>
            <input type="number" name="age">
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
            <input type="submit" value="送信">
        </td>
    </tr>
</table>
