@extends('menu')
@section('content')
<br><br><br><br>
<!-- Booking -->
<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-40 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center"> 
							<br><br><br><br>
							<h1>Reservation<h1>
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
						    Table de livre
						</h3>
					</div>

					<form class="wrap-form-booking">
						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									nom_du_client
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom_du_client" placeholder="Nom du client">
									<!--<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>-->
								</div>

								<!-- Time -->
								<span class="txt9">
									Nbr_nuit
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="Nbr_nuit">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
									</select>
								</div>

								<!-- People -->
								<span class="txt9">
									statu
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="statu">
								
										<option>En attente</option>
										<option>En consommation</option>
										<option>En annulation</option>
										
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									prenom_du_client
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="prenom_du_client" placeholder="Prenom du client">
								</div>

								<!-- Phone -->
								<span class="txt9">
									date_arrivé
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="date" name="date_arrivé" placeholder="date d'arrivé">
								</div>

								<!-- Email -->
								<span class="txt9">
									date_depart
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="date" name="date_depart" placeholder="date de depart">
								</div>
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn btn-primary">Envoyer un message</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{asset('images/booking-01.jpg')}}" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	


    @endsection