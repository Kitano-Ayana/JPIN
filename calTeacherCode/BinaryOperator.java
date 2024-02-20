
public abstract class BinaryOperator implements Expression {
	
	public abstract void setLeft(Expression left);
	public abstract void setRight(Expression right);
	
	@Override
	public boolean isBinaryOperator() {
		return true;
	}
	
	@Override
	public boolean isUnaryOperator() {
		return false;
	}
}
