
public interface Expression  {
	int evaluate();
	boolean isNull();
	boolean isBinaryOperator();
	boolean isUnaryOperator();
}
