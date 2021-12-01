<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 offset-md-2">
			<div class="container-fluid content-background d-flex flex-column">
				<div class="row my-auto">
					<div class="col-md-12">
						<div class="col-md-4 offset-md-4 text-center test3">
							<div class="row text-center">
								<div class="col-md-12 p-0">
									<input type="" name="" class="result input" id="result">
								</div>
							</div>
							<div class="row pb-4 test">
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="clearscreen()">Clr</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="squared()">x<sup>2</sup></button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber('%')">%</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber('/')">&#247</button></div>

								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(7)">7</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(8)">8</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(9)">9</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber('*')">X</button></div>
	
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(4)">4</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(5)">5</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(6)">6</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber('-')">-</button></div>
	
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(1)">1</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(2)">2</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(3)">3</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber('+')">+</button></div>
	
								<div class="col-sm-6 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(0)">0</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="addnumber(',')">,</button></div>
								<div class="col-sm-3 mt-4"><button class="btn btn-block btn-style" onclick="calc($('#result').val())">=</button></div>						
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="./js/calculator.js"></script>