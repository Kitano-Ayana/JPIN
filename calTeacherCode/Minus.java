
public class Minus extends BinaryOperator {
	
	private Expression left;
	private Expression right;
	
	public Minus(Expression left, Expression right) {
		super();
		this.left = left;
		this.right = right;
	}
	
	public static Minus empty() {
		return new Minus(new NullValue(), new NullValue());
	}

	@Override
	public int evaluate() {
		if (left.isNull() || right.isNull()) {
			throw new RuntimeException();
		}
		return left.evaluate() - right.evaluate();
	}

	@Override
	public boolean isNull() {
		return false;
	}

	@Override
	public void setLeft(Expression left) {
		this.left = left;
	}

	@Override
	public void setRight(Expression right) {
		this.right = right;
	}
	
	
	
}
