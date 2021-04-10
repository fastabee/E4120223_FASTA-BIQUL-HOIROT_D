  
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package latihan;

import java.util.Iterator;
import java.util.LinkedList;

/**
 *
 * @author fastabee
 */
public class DfsGraph {
    //no of vertices.
    int V;
    LinkedList<Integer> adjList[]; 
 
    //constructor
    DfsGraph(int v){
        V = v;
        adjList = new LinkedList[v];
        for (int i=0; i<v; ++i){
            adjList[i] = new LinkedList();  
            //it will create empty list for every node
        }
    }
    
    //adding edges to graph 
    void addEdgesToGraph(int v, int u){
        adjList[v].add(u);     
        //here it will add vertex to adjacency list of another vertex 
        //so that edge can be added to graph.
    }
	
    //depth first traversal is used by depth first search
    //it will traverse one strong component completely
    void DFTraversal(int v,int visited[]){
        visited[v] = 1;
	System.out.print(v + " ");
        Iterator<Integer> i = adjList[v].listIterator();
        while (i.hasNext()){
            int n = i.next();
            if (visited[n]==0){
                DFTraversal(n, visited);
            }
        }
    }
	
    //depth first search will call depth fist traversal on 
    //disconnected components. it will keep track of visited[] array.
    void DFSearch(int v){
        int visited[] = new int[V];
	DFTraversal(v, visited);
            for (int i=1;i<V;i++){
		if(visited[i]==0){
		     DFTraversal(i, visited);
		}
            }
    }
 
    public static void main(String args[]){
        DfsGraph obj = new DfsGraph(10);
        
        obj.addEdgesToGraph(1,2);
        obj.addEdgesToGraph(1,4);
        obj.addEdgesToGraph(2,5);
        obj.addEdgesToGraph(2,6);
        obj.addEdgesToGraph(4,7);
        obj.addEdgesToGraph(4,8);
        obj.addEdgesToGraph(3,9);
        obj.addEdgesToGraph(3,4);
        obj.addEdgesToGraph(4,3);
        
        obj.DFSearch(1);
    }
}
