@extends('master')

@section('title]')
Details
@endsection
@section('content')

<br>
<div class="spec ">
	<h3>Short Codes</h3>
	<div class="ser-t">
		<b></b>
		<span><i></i></span>
		<b class="line"></b>
	</div>
</div>

<div align="center">
	<iframe width="854" height="480" src="https://www.youtube.com/embed/TeoS_fQWvkY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

	<ul class="contact-list">
		<li> <i class="fa fa-eye" aria-hidden="true"></i> 9.999.999 Viewers</li>
		<li><i class="fa fa-thumbs-up" aria-hidden="true"></i><a href="mailto:example@mail.com">909009 likes</a></li>
		<li> <i class="fa fa-clock-o" aria-hidden="true"></i>21 April 2018</li>
	</ul>

</div>



<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10 single-top-left ">
			<div class="single-right">
				<h3>Jiggly Fluffy Japanese Cheesecake</h3>

				<div class="pr-single" style="padding-bottom: 0;">
					<p class="reduced" ><del>$10.00</del>$5.00</p>
				</div>

				<p class="in-pa" style="margin:0;"> 
					Here is what you'll need!
				<br>
				<br>
					Fluffy Jiggly Japanese Cheesecake
					Servings: 6-8
				<br>
				<br>
					<h3>INGREDIENTS</h3>
				<br>
				<br>
					<ul>
					<li>⅔ cup (130 milliliters) milk</li>
					<li>4 ounces (100 grams) cream cheese</li>
					<li>7 tablespoons (100 grams ) butter</li>
					<li>8 egg yolks</li>
					<li>½ cup (60 grams) flour</li>
					<li>½ cup (60 grams) cornstarch</li>
					<li>13 large egg whites</li>
					<li>⅔ cup (130 grams) granulated sugar</li>
					<li>Parchment paper</li>
					<li>Strawberries, to serve</li>
					<li>Powdered sugar, to serve</li>
					</ul>
				<br>
				<br>
					<h3> PREPARATION </h3>
				<br>
					<p>Preheat oven to 320°F/160°C.
					In a small pot over medium heat, whisk the milk, cream cheese, and butter until smooth. Remove from heat and cool.
					In a large bowl, whisk the egg yolks until smooth, then slowly drizzle in the cream mixture, stirring until evenly combined.
					Sift in the flour and the cornstarch, whisking to make sure there are no lumps.
					In another large bowl, beat the egg whites with a hand mixer until you see soft peaks when lifting the mixer up from the egg whites. 
					Gradually add the sugar while continuing to beat until you see hard peaks when lifting the mixer up.
					Take about ¼ of the egg whites and fold them into the egg yolk mixture, then repeat with the remaining egg whites until the batter is evenly combined.
					Place a 4-inch parchment paper strip around the edge of a 9x3-inch cake pan that is already lined with parchment at the bottom. If you are using a springform pan, make sure to wrap the bottom and sides completely in foil, twice, to prevent any leakage.
					Pour the batter into the parchment-lined pan and shake to release any large air bubbles.
					Place the filled pan into a larger baking pan or dish lined with 2 paper towels at the bottom. The paper towels ensure that the heat is distributed evenly along the bottom of the pan. Fill the larger pan about 1-inch with hot water.
					Bake for 25 minutes, then reduce the heat to 280°F/135°C, and bake for another 55 minutes, until the cake has risen to almost double its height.
					Remove from oven, and carefully, invert the cake onto your dominant hand and peel off the paper. Be extremely careful, the cake will be hot. You can also invert the cake onto a plate, but this will cause the cake to deflate more. 
					Sprinkle the top of the cake with powdered sugar, slice, and serve with strawberries while still warm!
					Enjoy!</p> 
				</p>

				<div class="add add-3">
				<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Wheat" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/si.jpg"><a href="{{url('transactions/1')}}">Add to Cart</a></button>
				</div>


				<div class="clearfix"> </div>
				<br>
			</div>

		</div>
	</div>
</div>


@endsection
