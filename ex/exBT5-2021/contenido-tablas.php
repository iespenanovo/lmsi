<!-- código emmet para generar estructura tablas

TABLA 1:

table>caption{Tabla 1}+(tr>th{Cab $}*5)+(tr>td{Celda 1.$}*5)+(tr>td{Celda 2.$}*5)+(tr>td{Celda 3.$}*5)+(tr>td{Celda 4.$}*5)+(tr>td{Celda 5.$}*5) 


TABLA 2:

table>caption{Tabla 2}+(tr>th{Cab $}*5)+(tr>td{Celda 1.$}*5)+(tr>td{Celda 2.$}*5)+(tr>td{Celda 3.$}*5)+(tr>td{Celda 4.$}*5)+(tr>td{Celda 5.$}*5) 

-->


<div id="tablas" >
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-striped table-responsive text-center">
					<caption class="bg-primary">Tabla 1</caption>
					<tr class="bg-primary">
						<th>Cab 1</th>
						<th>Cab 2</th>
						<th>Cab 3</th>
						<th>Cab 4</th>
						<th>Cab 5</th>
					</tr>
					<tr>
						<td>Celda 1.1</td>
						<td>Celda 1.2</td>
						<td>Celda 1.3</td>
						<td>Celda 1.4</td>
						<td>Celda 1.5</td>
					</tr>
					<tr>
						<td colspan="2">Celda 2.1-2.2</td>
						<!-- <td>Celda 2.2</td> -->
						<td>Celda 2.3</td>
						<td>Celda 2.4</td>
						<td>Celda 2.5</td>
					</tr>
					<tr>
						<td>Celda 3.1</td>
						<td>Celda 3.2</td>
						<td>Celda 3.3</td>
						<td rowspan="2">Celda 3.4-4.4</td>
						<td>Celda 3.5</td>
					</tr>
					<tr>
						<td>Celda 4.1</td>
						<td>Celda 4.2</td>
						<td>Celda 4.3</td>
						<!-- <td>Celda 4.4</td> -->
						<td>Celda 4.5</td>
					</tr>
					<tr>
						<td>Celda 5.1</td>
						<td>Celda 5.2</td>
						<td>Celda 5.3</td>
						<td>Celda 5.4</td>
						<td>Celda 5.5</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table class="table table-striped table-responsive text-center">
					<caption class="bg-primary">Tabla 2</caption>
					<tr class="bg-primary">
						<th>Cab 1</th>
						<th>Cab 2</th>
						<th>Cab 3</th>
						<th>Cab 4</th>
						<th>Cab 5</th>
					</tr>
					<tr>
						<td>Celda 1.1</td>
						<td>Celda 1.2</td>
						<td>Celda 1.3</td>
						<td>Celda 1.4</td>
						<td>Celda 1.5</td>
					</tr>
					<tr>
						<td colspan="2">Celda 2.1-2.2</td>
						<!-- <td>Celda 2.2</td> -->
						<td>Celda 2.3</td>
						<td>Celda 2.4</td>
						<td>Celda 2.5</td>
					</tr>
					<tr>
						<td>Celda 3.1</td>
						<td>Celda 3.2</td>
						<td>Celda 3.3</td>
						<td rowspan="2">Celda 3.4-4.4</td>
						<td>Celda 3.5</td>
					</tr>
					<tr>
						<td>Celda 4.1</td>
						<td>Celda 4.2</td>
						<td>Celda 4.3</td>
						<!-- <td>Celda 4.4</td> -->
						<td>Celda 4.5</td>
					</tr>
					<tr>
						<td>Celda 5.1</td>
						<td>Celda 5.2</td>
						<td>Celda 5.3</td>
						<td>Celda 5.4</td>
						<td>Celda 5.5</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
</div>
