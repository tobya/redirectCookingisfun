@foreach($items as $item)

    <li>
        <a href="{{$item[0]}}">{{$item[0]}} ---------> {{@$item[1]}}</a>
    </li>
@endforeach
