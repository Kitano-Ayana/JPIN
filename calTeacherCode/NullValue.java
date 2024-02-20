
public class NullValue implements Expression {
	@Override
	public int evaluate() {
		throw new RuntimeException();
	}
	
	@Override
	public boolean isNull() {
		return true;
	}

	@Override
	public boolean isBinaryOperator() {
		return false;
	}

	@Override
	public boolean isUnaryOperator() {
		return false;
	}
}
