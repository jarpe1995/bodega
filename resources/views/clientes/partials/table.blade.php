<table v-if="clientes && clientes.length" class="table table-striped table-hover " id="lista">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre y Apellido</th>
			<th>Doc. Identidad</th>
			<th>Telf.</th>
			<th>Correo</th>
			<th>Direccion</th>
			<th>Operaciones</th>
		</tr>
	</thead>
	<tbody>
		<tr v-for="(cliente,index) in clientes">
			<td>@{{ cliente.id }} </td>
			<td>@{{ cliente.nombre }} @{{ cliente.apellido }}</td>
			<td>@{{ cliente.doc }}</td>
			<td>@{{ cliente.telefono }}</td>
			<td>@{{ cliente.correo }}</td>
			<td>@{{ cliente.direccion }}</td>
			<td>
				<button class="btn btn-danger" v-on:click="removeCliente(index,cliente.id)" ><span class="glyphicon glyphicon-trash"></span></button>
				<button class="btn btn-primary" data-toggle="modal" @click="showModal(cliente.id,index)"><span class="glyphicon glyphicon-pencil"></span></button>
			</td>
		</tr>
	</tbody>
</table>
@include('clientes.modaledit')	
<center v-if="clientes.length < 1">@{{ msg }} </center>
<nav aria-label="..." v-if="articulos.length >= 10 || next != '' || previous != ''">
	<ul class="pager">
		<li :class="previous != null ? 'previous' : 'previous disabled' " ><a :style="previous != null ? '' : 'pointer-events: none' " @click="previous_page" ><span aria-hidden="true">&larr;</span>Anterior</a></li>
		<li :class="next != null ? 'next' : 'next disabled' "><a :style="next != null ? '' : 'pointer-events: none'" @click="next_page">Siguiente <span aria-hidden="true">&rarr;</span></a></li>
	</ul>
</nav>