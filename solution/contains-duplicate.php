class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {

        sort($nums);
        for ($i=0 ; $i < count($nums) - 1 ; $i++) {
            if ($nums[$i] == $nums[$i + 1])
            return true;
    }

    return false;

        
    }
}