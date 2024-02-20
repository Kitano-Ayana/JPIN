
public class CalcFactory {
	
	public static Calculator getInstance() {
		Calculator calc = new Calculator();
		calc.setAdd(Add.empty());
		calc.setMinus(Minus.empty());
		
		return calc;
	}
	
}
