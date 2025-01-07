سوال سوم :
#!/bin/bash
if [ -f "process_check.txt" ]; then
    echo "exist"
else
    touch process_check.txt
    date_and_time=$(date)
    echo "$date_and_time" > process_check.txt
fi


bash_ids=$(pgrep -x bash)
if [ -n "$bash_ids" ]; then
    echo "found"
    for id in $bash_ids; do
        echo "Terminating process with ID: $id"
        kill -9 $id
    done
    echo "terminated"
else
    echo "not found"
fi