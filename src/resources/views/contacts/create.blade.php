@extends('layouts.contact')

@section('title', 'お問い合わせ作成')

@section('content')
    <a href="{{ route('contacts.index') }}">お問い合わせ一覧を見る</a>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contacts.store') }}" method="POST">
        <table>
            @csrf
            <tr>
                <th>部署</th>
                <td>
                    <select name="department_id">
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" @if( old('department_id') == $department->id ) selected @endif>
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>名前</th>
                <td>
                    <input type="text" name="name" value="{{ old('name') }}">
                </td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="email" name="email" size="50" value="{{ old('email') }}">
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea name="content" cols="65" rows="5">{{ old('content') }}</textarea>
                </td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>
                    <input type="number" name="age" value="{{ old('age') }}">
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>
                    <input type="number" name="gender" value="{{ old('gender') }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="送信">
                </td>
            </tr>
        </table>
    </form>
@endsection
