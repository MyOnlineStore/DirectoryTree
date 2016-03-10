<?php 

passthru("tree --noreport -o tree.txt .");
passthru("echo \"\`\`\`\n\" > readme.md");
passthru("cat  tree.txt >> readme.md");
passthru("echo \"\n\`\`\`\" >> readme.md");
passthru("rm tree.txt");
