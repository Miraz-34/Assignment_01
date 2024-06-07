<?php

class Graph {
    private $adjList;

    public function __construct() {
        $this->adjList = [];
    }

    public function addEdge($v, $w) {
        if (!isset($this->adjList[$v])) {
            $this->adjList[$v] = [];
        }
        if (!isset($this->adjList[$w])) {
            $this->adjList[$w] = [];
        }
        $this->adjList[$v][] = $w;
        $this->adjList[$w][] = $v;  // Comment out this line if the graph is directed
    }

    public function BFS($start) {
        $visited = [];
        $queue = new SplQueue();

        $visited[$start] = true;
        $queue->enqueue($start);

        while (!$queue->isEmpty()) {
            $vertex = $queue->dequeue();
            echo $vertex . " ";

            foreach ($this->adjList[$vertex] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $visited[$neighbor] = true;
                    $queue->enqueue($neighbor);
                }
            }
        }
    }
}

// Example usage
$graph = new Graph();
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 2);
$graph->addEdge(2, 3);
$graph->addEdge(3, 3);

echo "BFS traversal starting from vertex 2:\n";
$graph->BFS(2);
?>