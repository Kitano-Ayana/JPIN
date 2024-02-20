
public class Sample {
	public static void main(String[] args) {
		
		Calculator calc = CalcFactory.getInstance();
		calc.setLeft(3);
		calc.setType(Operator.MINUS);
		calc.setRight(2);
		
		int result = calc.getResult();
		System.out.println(result);
		
	}
}
