setfpscap(10)
wait(10)
local function findPlayer(name)
					for _, Player in ipairs(game.Players:GetPlayers()) do
						if (string.lower(name) == string.sub(string.lower(Player.Name), 1, #name)) then
							return Player;
						end
					end
				end
				local thes2 = tostring(findPlayer(getgenv().skid))
				local target = game.Players:FindFirstChild(thes2)
				if target then
					local lp = game.Players.LocalPlayer
					local ch = lp.Character
					local tool = lp.Backpack.Wallet
					local CFrameTool = function(tool, pos)
						local RightArm = ch:FindFirstChild("RightLowerArm") or ch:FindFirstChild("Right Arm")
						local Arm = RightArm.CFrame * CFrame.new(0, -1, 0, 1, 0, 0, 0, 0, 1, 0, -1, 0)
						local Frame = Arm:ToObjectSpace(pos):Inverse()
	
						tool.Grip = Frame
					end
					game:GetService("Players").LocalPlayer.Character.HumanoidRootPart.CFrame = game:GetService("Players")[thes2].Character.HumanoidRootPart.CFrame
					local targetroot = target.Character:FindFirstChild("UpperTorso") or target.Character:FindFirstChild("Torso")
					local newHum = lp.Character.Humanoid:Clone()
					newHum.Parent = lp.Character
					lp.Character.Humanoid:Destroy()
					newHum:ChangeState(15)
					tool.Parent = ch
					tool.Handle.Size = Vector3.new(1, 1, 1)
					CFrameTool(tool, targetroot.CFrame)
					firetouchinterest(targetroot, tool.Handle, 0)
					firetouchinterest(targetroot, tool.Handle, 1)
					else
					    print('lol ragequit')
				end

