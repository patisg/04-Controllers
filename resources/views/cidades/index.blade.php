<h1>Sistema Gestão de Municípios - Governo do Paraná</h1>
<h2>Lista de Cidades</h2>
<a href="{{ route('cidades.create') }}"><h4>Nova Cidade</h4></a>
<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>PORTE</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       <!-- Funcionalidade Blade / Laço Repetição -->
       <!-- Percorre o array clientes enviado pela Controller -->
       @foreach ($cidades as $item)
           <tr>
               <!-- Acessa os campos de cada item do array -->
               <td>{{ $item['id'] }}</td>
               <td>{{ $item['nome'] }}</td>
               <td>{{ $item['porte'] }}</td>
               <td><a href="{{ route('cidades.edit', $item['id']) }}"><button>Editar</button></a></td>
               <td>
                   <form action="{{ route('cidades.destroy', $item['id']) }}" method="POST">
                       <!-- Token de Segurança -->
                       <!-- Define o método de submissão como delete -->
                       @csrf
                       @method('DELETE')
                       <input type='submit' value='Remover'>
                   </form>
               </td>
           </tr>
       @endforeach
   </tbody>
</table>