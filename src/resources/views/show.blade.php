@extends('app')

@section('content')
<div>
    <div>
        <h2>文房具詳細画面</h2>
    </div>
    <div>
        <a href="{{ url('./bunbougus') }}?page={{ $page_id }}">一覧に戻る</a>
    </div>
</div>

<div>
    <div>
        <div>
            <div>
                <div>
                    <label>文房具名</label>
                    <div>{{ $bunbougu->name }}</div>
                </div>
                <div>
                    <label>価格</label>
                    <div>{{ $bunbougu->kakaku }}</div>
                </div>
                <div>
                    <label>分類</label>
                    <div>
                        @foreach($bunruis as $bunrui)
                            @if($bunrui->id==$bunbougu->bunrui)
                                {{ $bunrui->str }}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div>
                    <label>詳細</label>
                    <div>{{ $bunbougu->shosai }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection