@extends('app')

@section('content')
<div>
    <div>
        <h2>文房具編集画面</h2>
    </div>
    <div>
        <a href="{{ url('./bunbougus') }}">一覧に戻る</a>
    </div>
</div>

<div>
    <form action="{{ route('bunbougu.update', $bunbougu->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <div>

                <div>
                    <input type="text" name="name" placeholder="文房具名" value="{{ $bunbougu->name }}">
                    @error('name')
                        <span>20文字以内で入力してください。</span>
                    @enderror
                </div>

                <div>
                    <input type="text" name="kakaku" placeholder="価格" value="{{ $bunbougu->kakaku }}">
                    @error('kakaku')
                        <span>整数で入力してください。</span>
                    @enderror
                </div>

                <div>
                    <textarea name="shosai" placeholder="詳細">{{ $bunbougu->shosai }}</textarea>
                    @error('shosai')
                        <span>100文字以内で入力してください。</span>
                    @enderror
                </div>

                <div>
                    <select name="bunrui">
                        @foreach($bunruis as $bunrui)
                            <option value="{{ $bunrui->id }}"@if($bunrui->id==$bunbougu->bunrui) selected @endif>{{ $bunrui->str }}</option>
                        @endforeach
                    </select>
                    @error('bunrui')
                        <span>分類を選択してください</span>
                    @enderror
                </div>

                <div>
                    <button type="submit">登録</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection