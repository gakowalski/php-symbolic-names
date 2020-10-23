<?php

require 'symbolic-names.php';

assert_options(ASSERT_BAIL, true);

assert( √(4) == 2 );
assert( ∛(8) == 2 );
assert( ∜(16) == 2 );
assert( √√(16) == 2 );
assert( 𝜋() == M_PI );
assert( 💭('2%03d-%02d-%02d', 19, 2, 1) === '2019-02-01' );
echo 'Testing string output: ';
assert( 💬('2%03d-%02d-%02d', 19, 2, 1) === 📏('2019-02-01') );
echo "... done!\n";
assert( 💤(1) === 0 );
assert( 🗚('Test') == 'TEST' );
assert( 🗛('Test') == 'test' );
assert( 💥('-', '2019-02-01')[1] == 2 );
assert( ✂("\t test \n") == 'test' );

echo "All tests passed successfully!\n";
