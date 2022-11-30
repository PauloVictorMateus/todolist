<div>
    @if(session()->has('success'))
        {{session()->get('success')}}
    @elseif($errors->any())
        @foreach($errors->all() as $error)
            {{'Algo deu errado!'}}
        @endforeach
    @endif
</div>