
public class Negative extends UnaryOperator {
	
	private Expression operand;
	
	public Negative(Expression num) {
		super();
		this.operand = num;
	}

	@Override
	public int evaluate() {
		return -operand.evaluate();
	}
	
	@Override
	public boolean isNull() {
		return false;
	}

	@Override
	public void setOperand(Expression operand) {
		this.operand = operand;
	}
}
