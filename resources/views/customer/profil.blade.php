@foreach($profil as $p)
<h1>{{ $p->name }}</h1>
<h1>{{ $p->gender }}</h1>
<h1>{{ $p->email }}</h1>
<h1>{{ $p->telephone }}</h1>
<h1>{{ $p->address }}</h1>    
@endforeach