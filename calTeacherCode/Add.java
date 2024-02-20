
public class Add extends BinaryOperator {
	
	private Expression left;
	private Expression right;
	
	public Add(Expression a, Expression b) {
		this.left = a;
		this.right = b;
	}
	
	@Override
	public int evaluate() {
		if (left.isNull() || right.isNull()) {
			throw new RuntimeException();
		}
		return left.evaluate() + right.evaluate();
	}

	@Override
	public boolean isNull() {
		return false;
	}
	
	public static Expression empty() {
		return new Add(new NullValue(), new NullValue());
	}
	
	public void setLeft(Expression left) {
		this.left = left;
	}

	public void setRight(Expression right) {
		this.right = right;
	}
}
