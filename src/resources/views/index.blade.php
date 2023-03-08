@extends('app')

@section('content')
    <div>
        <div>
            <h2>文房具マスター</h2>
        </div>
        <div>
            <a href="{{ route('bunbougu.create') }}">新規登録</a>
        </div>
    </div>

    <table>
        <tr>
            <th>No.</th>
            <th>name</th>
            <th>kakaku</th>
            <th>bunrui</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($bunbougus as $bunbougu)
            <tr>
                <td>{{ $bunbougu->id }}</td>
                <td><a href="{{ route('bunbougu.show', $bunbougu->id) }}?page_id={{ $page_id }}">{{ $bunbougu->name }}</a></td>
                <td>{{ $bunbougu->kakaku }}</td>
                <td>{{ $bunbougu->bunrui }}</td>
                <td><a href="{{ route('bunbougu.edit', $bunbougu->id) }}">編集</a></td>
                <td>
                    <form action="{{ route('bunbougu.destroy', $bunbougu->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick='return confirm("削除しますか？")'>削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
        {!! $bunbougus->links() !!}
@endsection
