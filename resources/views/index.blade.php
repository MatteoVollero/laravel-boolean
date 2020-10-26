<table>
  <thead>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Date Of Birth</th>
  </thead>
  @foreach ($students as $student)
    <tr>
      <td>{{$student->name}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->date_of_birth}}</td>
    </tr>
  @endforeach
</table>
