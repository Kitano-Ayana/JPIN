
public enum Operator {
	
	ADD(OperatorType.BINARY), 
	MINUS(OperatorType.BINARY),
	MULTI(OperatorType.BINARY),
	DIVIDE(OperatorType.BINARY),
	NEGATIVE(OperatorType.UNARY),
	SQRT(OperatorType.UNARY);
	
	private OperatorType type;
	
	private Operator(OperatorType type) {
		this.type = type;
	}
	
	public boolean isBinary() {
		return type == OperatorType.BINARY;
	}
	
	public boolean isUnary() {
		return type == OperatorType.UNARY;
	}
}
