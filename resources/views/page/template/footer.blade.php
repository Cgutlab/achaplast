 <footer style="width: 100%; background: #333333;">
 <div class="container yp25 cero" style="width: 100%; ">
 <div class="row cero" style="margin-bottom: 0;">
 	<div class="offset-l1 col l4 s12 hide-on-med-and-down">
 		<img class="responsive-img ym30" src="{{asset('imagenes/logos/'.$footer->imagen)}}"> 		
 	</div>
 	<div class="col l7 s12"> 	 	
 		<div class="row cero" style="margin-bottom: 0;">
{{--
 			<div class="col l4 s12">
 				<h5 class="blanco">EMPRESA CERTIFICADA</h5>
 				<img class="responsive-img" src="{{asset('imagenes/logos/'.$fuuter->imagen)}}">
 			</div>
--}}
 			<div class="col l4 s12">

 				<h5 class="blanco">SITEMAP</h5>
 				<ul>
		           	<li><a class="cero fs14" href="{{route('index')}}">HOME</a></li>
		           	<li class="ym3"><a class="cero fs14 Roboto" href="{{route('empresax')}}">EMPRESA</a></li>
		          	<li class="ym3"><a class="cero fs14 Roboto" href="{{route('achaplasts')}}">PRODUCTOS</a></li>
		          	<li class="ym3"><a class="cero fs14 Roboto" href="{{route('matriceria')}}">MATRICERIA</a></li>
		          	<li class="ym3"><a class="cero fs14 Roboto" href="{{route('contacto')}}">CONTACTO</a></li>
           		</ul>

 			</div>
 			<div class="col l5 s12">
 				<div class="row cero" style="margin-bottom: 0;">
 					<div class="offset-l1 col l11">
						<div class="row cero noFooterIcon">
							<div class="offset-l2 col l10 cero fw4 blanco s10" style="margin-bottom: 0;">
								<h5 class="blanco">ACHA PLAST S.A.</h5>
							</div>
						</div>
						<div class="row cero noFooterIcon">
							<div class="col l2 cero noFooterIcon s2" style="padding: 0px;">
								<img class="responsive-img" src="{{asset('imagenes/help/address.png')}}">
							</div>
							<div class="col l10 cero fw4 blanco s10" style="margin-bottom: 0;">
								<a class="fw4 blanco s10" href="{{'https://www.google.com/maps/search/'.$direccion->texto}}">
									{{$direccion->texto}}
								</a>								
							</div>
						</div>
						<div class="row cero noFooterIcon" style="padding-top: 10px;">
							<div class="col l2 cero noFooterIcon s2">
								<img class="responsive-img" src="{{asset('imagenes/help/phone.png')}}">
							</div>
							<div class="col l10 cero fw4 blanco s10" style="margin-bottom: 0;">
								<a class="fw4 blanco s10" href="tel:{{$telefono->texto}}">{{$telefono->texto}}</a><br>
								<a class="fw4 blanco s10" href="tel:{{$fax->texto}}">{{$fax->texto}}</a>
							</div>
						</div>
						<div class="row cero noFooterIcon" style="padding-top: 10px;">
							<div class="col l2 cero noFooterIcon s2">
								<img class="responsive-img" src="{{asset('imagenes/help/email.png')}}">
							</div>
							<a href="mailto:{{$correo->texto}}">
							<div class="col l10 cero fw4 blanco s10" style="margin-top: 4px;">
								{{$correo->texto}}
							</div>
							</a>
						</div>
 					</div>
 				</div>
 			</div> 			
 		</div>
 	</div>
 </div>	
 </div>
</footer>