






@if($operator == "mul")
	<h1>Multiplication</h1>

	<p> multiplicand &nbsp {{ $n1 }}</p>
	<p> multiplier &nbsp{{ $n2 }}</p>
	<h2><p>product &nbsp{{ $n1*$n2 }}</p></h2>



@elseif($operator == "add")
	<h1>Addtion</h1>
	<p>added &nbsp{{ $n1 }}</p>
	<p>adder  &nbsp{{ $n2 }}</p>
	<h2><b><p>sum &nbsp{{ $n1+$n2 }}</p></b></h2>

@elseif($operator == "div")
@if($n2 == 0)
	<h1>Division</h1>
	<p> divided &nbsp{{ $n1 }}</p>
	<p> divisor &nbspNOT pOSSIBLE </p>
	<h2><b><p>quotient &nbsp errOR</p></b></h2>
@else	
     <h1>Division</h1>
	<p> divided &nbsp{{ $n1 }}</p>
	<p> divisor &nbsp{{ $n2 }}</p>
	<h2><b><p>quotient &nbsp{{ $n1/$n2 }}</p></b></h2>
@endif
@elseif($operator == "sub")

	
	<h1>Subtraction</h1>
	<p>sadtrahen  &nbsp {{ $n1 }}</p>
	<p>minued  &nbsp{{ $n2 }}</p>
	<h2><b><p>difference &nbsp{{ $n1-$n2 }}</p></b></h2>


@endif
