#include <bits/stdc++.h>

using namespace std;

struct TrieNode {
  int value;
  unordered_map<int, TrieNode*> children;
};

TrieNode* CreateTrie() {
  TrieNode* root = new TrieNode();
  root->value = 0;
  return root;
}

void InsertIntoTrie(TrieNode* root, int element) {
  TrieNode* current_node = root;
  for (int bit = 31; bit >= 0; bit--) {
    int bit_value = (element >> bit) & 1;
    if (current_node->children.count(bit_value) == 0) {
      current_node->children[bit_value] = new TrieNode();
    }
    current_node = current_node->children[bit_value];
    current_node->value |= element;
  }
}

int MaxBitwiseOROfPrefix(TrieNode* root, int element) {
  TrieNode* current_node = root;
  int prefix_or = 0;
  for (int bit = 31; bit >= 0; bit--) {
    int bit_value = (element >> bit) & 1;
    if (current_node->children.count(bit_value) == 0) {
      break;
    }
    current_node = current_node->children[bit_value];
    prefix_or |= current_node->value;
  }
  return prefix_or;
}

int MaxLengthSubarrayToRemoveForMaxBitwiseOR(vector<int>& array) {
  TrieNode* trie = CreateTrie();
  for (int element : array) {
    InsertIntoTrie(trie, element);
  }

  int max_length = 0;
  for (int i = 0; i < array.size(); i++) {
    int max_bitwise_or = MaxBitwiseOROfPrefix(trie, array[i]);
    max_length = max(max_length, max_bitwise_or >> 1);
  }

  return max_length;
}

int main() {
  vector<int> array = {2,1,1,5,4,4,8,};
  int max_length_to_remove = MaxLengthSubarrayToRemoveForMaxBitwiseOR(array);

  cout << max_length_to_remove << endl;

  return 0;
}