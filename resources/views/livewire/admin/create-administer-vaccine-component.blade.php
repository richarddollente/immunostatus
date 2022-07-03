<div>
    <main id="main" class="main-site">
		<div class="container">

			<div class="wrap-breadcrumb">
                <ul>
                    <p></p>
                </ul>
			</div>
			<div class=" main-content-area">
				<form wire:submit.prevent="store" >
					<div class="summary summary-checkout">
						<div class="summary-item payment-method">
							<p class="title-box">Patient Name</p>
							<div class="choose-payment-methods">
								<label class="payment-method">
                                    <select id="fname" name="user_id" class="use-chosen" wire:model="user_id">
                                        <option value="" selected="selected">Choose a registered patient</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
							</div>
						</div>
						<div class="summary-item shipping-method">
							<h4 class="title-box">Vaccine</h4>
							<div class="choose-shipping-methods">
								<label class="shipping-method">
                                    <select id="fname" name="vaccine_id" class="use-chosen" wire:model="vaccine_id">
                                        <option value="" selected="selected">Choose a vaccine</option>
                                        @foreach($vaccines as $vaccine)
                                        <option value="{{ $vaccine->id }}" >{{ $vaccine->name }}</option>
                                        @endforeach
                                    </select>
								</label>
							</div>
                            <p></p>
							<button type="submit" class="btn btn-medium">Add Vaccine Patient Information</button>
						</div>
					</div>
				</form>
			</div><!--end main content area-->
		</div><!--end container-->
	</main>
</div>
