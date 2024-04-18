## Operator Precedence Table for PHP

| Operators                       | Associativity | Precedence | Precedence Value |
|---------------------------------|---------------|------------|------------------|
| `()`                            | Non-associative | Highest  | 21               |
| `[]`                            | Non-associative |          | 20               |
| `->`, `::`                      | Left          |          | 19               |
| `++`, `--` (postfix)           | Left          |          | 18               |
| `**`                            | Right         |          | 17               |
| `!`, `~`, `++`, `--` (prefix), `(int)`, `(float)`, `(string)`, `(array)`, `(object)`, `(bool)`, `@` | Right | | 16 |
| `*`, `/`, `%`                   | Left          |          | 15               |
| `+`, `-`, `.`                   | Left          |          | 14               |
| `<<`, `>>`                      | Left          |          | 13               |
| `<`, `<=`, `>`, `>=`            | Non-associative |          | 12               |
| `==`, `!=`, `===`, `!==`, `<=>` | Non-associative |          | 11               |
| `&`                             | Left          |          | 10               |
| `^`                             | Left          |          | 9                |
| `|`                             | Left          |          | 8                |
| `&&`                            | Left          |          | 7                |
| `||`                            | Left          |          | 6                |
| `??`                            | Right         |          | 5                |
| `? :`                           | Right         |          | 4                |
| `=`, `+=`, `-=`, `*=`, `/=`, `.=`| Right        |          | 3                |
| `&=`, `^=`, `<<=`, `>>=`       | Right         |           | 2                |
| `and`                           | Left          |          | 1                |
| `xor`                           | Left          |          | 1                |
| `or`                            | Left          | Lowest   | 0                |
